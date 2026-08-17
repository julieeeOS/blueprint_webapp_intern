## Web application for managing Blueprints and Images

Based on [Symfony Docker ](https://github.com/dunglas/symfony-docker). Written according to the Symfony framework.
#### Getting started
1. [Install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --pull --no-cache` 
3. Run `docker compose up --wait` 
4. Open `https://localhost`
5. Run `docker compose down --remove-orphans` to stop the Docker containers.


The app is currently incomplete. 
#### Current capabilities:
- Running database, to connect from outside check which port in Docker Desktop it's being redirected from (**62685**:5432). Name of database is app, user is app and password is !ChangeMe!. This is due to a misconfiguration and the database would need to be reconfigured which should be relatively simple.
- Displaying objects in the database, including some example Blueprints at localhost/blueprint.
- All entities needed are set up, but lack relations for now other than between blueprint and device which is incomplete.
#### Features to be implemented
- Filtering blueprints according to device and images according to device architecture
- Visuals of the website according to the project
- Adding of Blueprints, Images and Devices with forms
- Logging in and access control
- Potentially uploading of files if the current storage method of Blueprints and Images changes.