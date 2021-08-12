import base64
import json
import re

from bs4 import BeautifulSoup

import replace_audio_short_codes_config as config
import requests
# from wordpress_json import WordpressJsonWrapper

# wp = WordpressJsonWrapper(config.WP_API_URL, config.WP_USER, config.WP_PASSWORD)
# posts = wp.get('posts')

encodable = '{}:{}'.format(config.WP_USER, config.WP_PASSWORD).encode('ascii')
token = base64.standard_b64encode(encodable)
headers = {'Authorization': 'Basic ' + str(token)}

# todo Change category to 14.
params = {'per_page': 30, 'categories': 14}

r = requests.get(config.WP_API_URL + '/posts', headers=headers, json=params)
result = json.loads(r.content.decode('utf-8'))

for post in result:
    mp3_url = None
    ogg_url = None
    mp3_table = None
    playlist_url = None
    playlist_table = None
    replacement = ''

    html = post['content']['rendered']
    soup = BeautifulSoup(html, 'html.parser')
    print(soup.prettify())

    links = soup.find_all('a')

    for link in links:
        href = link.get('href')

        if '.mp3' in href or '.MP3' in href:
            mp3_url = href

            replacement += '<audio controls class="audio-player audio-player-radio" style="width: 100%">\n'
            replacement += '    <source src="{}" type="audio/mp3">\n'.format(mp3_url)

            if 'archive.org' in href:
                ogg_url = href.lower().replace('.mp3', '.ogg')
                replacement += '    <source src="{}" type="audio/ogg">\n'.format(ogg_url)

            replacement += '    Your browser does not support the native audio player.\n'
            replacement += '</audio>\n'

            mp3_table = link.findParent(name='table')

            replacement += '<div class="audio-download-container">\n'
            replacement += '    <a href="{}">Download</a>\n'.format(mp3_url)
            replacement += '</div>\n'

        if 'searchplaylist' in href:
            playlist_url = href
            playlist_table = link.findParent(name='table')

            replacement += '<div class="playlist-link-container">\n'
            replacement += '    <a href="{}">Playlist</a>\n'.format(playlist_url)
            replacement += '</div>\n'

    print(replacement)


"""
Replace with:

<audio controls class="audio-player audio-player-radio" style="width: 100%">
    <source src="http://archive.org/download/djhugonaut/hugonaut16dec2008.mp3" type="audio/mp3">
    <source src="http://archive.org/download/djhugonaut/hugonaut16dec2008.mp3" type="audio/ogg">
    Your browser does not support the native audio player.
</audio>

<div class="audio-download-container">
    <a href="http://archive.org/download/djhugonaut/hugonaut16dec2008.mp3">Download</a>
</div>
<div class="playlist-link-container">
   <a href="http://www.wcbn.org/ryan-playlist/searchplaylist.php?advsearch=fromto&amp;playedfrom=1pm+december+16+2008&amp;playedto=3pm+december+16+2008&amp;keyword=">Playlist</a>
</div>

This would also work:

<div class="audio-shortcode-container">
[audio src="http://archive.org/download/djhugonaut/hugonaut16dec2008.mp3"]
</div>
"""
