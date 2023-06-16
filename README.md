# Image Resize Laravel API

This project is created for provide REST API for manipulate image size.

### How to start project

-   run `git clone [url for this repo] `
-   `cd image-resize-laravel-api` and run `composer install`
-   try to use Postman or your browser to consume these API

### API Lists

#### Album

-   GET `/album` for get all albums
-   POST `/album/{id}` for create an album
-   GET `/album/{id}` for get a single album
-   PUT `/album/{id}` for update an album
-   DELETE `/album/{id}` for delete an album

### Image

-   GET `/image` for get all images
-   GET `/image/by-album` for get images by album
-   GET `/image/{image}` for get a sigle image
-   POST `/image/resize` for resize image `ex: ../resize?w=100&h=100` w and h can use % for specify unit.
-   DELETE `/image/{image}` for delete image

### First Party Page for create API Token

-   GET `/dashboard`
-   GET `/token/create`
-   POST `/token/create`
-   DELETE `/token/delete/{token}`
