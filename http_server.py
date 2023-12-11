#!/bin/python3
from http.server import HTTPServer, SimpleHTTPRequestHandler
import socket

class HTTP10Server(HTTPServer):
    def get_request(self):
        request, client_address = self.socket.accept()
        return (request, client_address)


class HTTP10RequestHandler(SimpleHTTPRequestHandler):
    protocol_version = "HTTP/1.1"


if __name__ == "__main__":
    host = "localhost"
    port = 8000

    server_address = (host, port)
    httpd = HTTP10Server(server_address, HTTP10RequestHandler)

    print(f"Serwer HTTP/1.1 uruchomiony na http://{host}:{port}")
    httpd.serve_forever()
