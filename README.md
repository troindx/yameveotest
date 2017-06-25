# Friends app
This test consists on integrating the backend and frontend work.
For doing this you have to add the template engine TWIG into the project
You can find the work that came from the Frontend team in the /html folder
You can find the controller, which is currently returning a JSON Response in:
src/Infrastructure/Silex/Controller/FriendController

The idea is that you modify the JsonResponse for a rendered template using TWIG displaying the correct values that the backend is returning
instead of the values hardcoded in the HTML for the frontend team.

We would also like you to implement a paginator, displaying only a maximum of 5 friends per page.

The backend is ready to support all the requested logic, but feel free to add anything you'd like!

Recap of points:
* Implement TWIG in the project
* Refactor the HTML views to TWIG views
* Implement a paginator, displaying a max of 5 friends per page.

## Environment pre-setup

Requirements (Windows - Mac OS):

* Install [Docker Toolbox](https://www.docker.com/products/docker-toolbox)
* Have a virtual machine named `default`
* Run eval $(docker-machine env)

Requirements (Any Linux):

* Have docker installed

Run `docker-machine ip` and add the ip to your hosts file pointing to `dev.lunch.com`:

```
192.168.99.100 friends.dev
```

## Run environment

```bash
make dev
```

## See the container logs

```bash
make logs
```

## Enter a container

```bash
make enter

  Write the name of the service that you want to access, possible choices are:

    * phpfpm
    * nging

Service name: phpfpm
root@b20f96fdf431:/app/friends#
```

# WEB

Access to `http://friends.dev:9005`

REMEMBER: The site is mapped to the port 9005!!!