# Laravel hiring test
Create a Laravel APIs application for a travel agency.
# Glossary
    ●	Travel is the main unit of the project: it contains all the necessary information, like the number of days, the images, title, etc. An example is Japan: road             to Wonder or Norway: the land of the ICE;
    ●	Tour is a specific dates-range of a travel with its own price and details. Japan: road to Wonder may have a tour from 10 to 27 May at €1899, another one                 from 10 to 15 September at €669 etc. At the end, you will book a tour, not a travel.
# Goals
    At the end, the project should have:
    1.	A private (admin) endpoint to create new users. If you want, this could also be an artisan command, as you like. It will mainly be used to generate users for         this exercise;
    2.	A private (admin) endpoint to create new travels;
    3.	A private (admin) endpoint to create new tours for a travel;
    4.	A private (editor) endpoint to update a travel;
    5.	A public (no auth) endpoint to get a list of paginated travels. It must return only public travels;
    6.	A public (no auth) endpoint to get a list of paginated tours by the travel slug (e.g. all the tours of the travel foo-bar). Users can filter (search) the             results by priceFrom, priceTo, dateFrom (from that startingDate) and dateTo (until that startingDate). User can sort the list by price asc and desc. They             will always be sorted, after every additional user-provided filter, by startingDate asc.
# How to setup
    composer install
    copy .env.example to .env
    cp .env.example .env
    generate security key , link storage file
    php artisan key:generate 
    after connect your database via .env file
    php artisan migrate:fresh
    php artisan db:seed
 
