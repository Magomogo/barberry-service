barberry-images
===============

Images hosting service on base of Barberry library

Installation
------------

    composer.phar install

Uploading an image
------------------

*Request*

    POST /
    Content-Type: multipart/form-data;

    ... image ...

*Response*

    HTTP/1.1 201 Created
    Content-Type: application/json

    {"id":"4feSq4","contentType":"image\/jpeg","ext":"jpg","length":323147,"filename":"original.jpg"}

Getting an image
----------------

To get an original image just request it by ID.

*Request*

    GET /4feSq4

*Response*

    HTTP/1.1 200 OK
    Content-Type: image/jpeg

    ... original image ...


To resize and convert image request it by ID and extension.

*Request*

    GET /4feSq4_100x100.gif HTTP/1.1


*Response*

    HTTP/1.1 200 OK
    Content-Type:image/gif

    ... resized image 100 x 100 ...


