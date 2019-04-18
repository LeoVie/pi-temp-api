# Kununu Symfony API Skeleton
This is a basic REST API setup you can use to start a API service.  

---
## Basic setup

### Create a new project
```bash
composer create-project kununu/symfony-api-skeleton:^0.1.0 [dir_name]
```

### Start a server
After the installation you need to start a server first via Symfony console:

```bash
php bin/console server:start
```

### Test the API
Navigate to http://127.0.0.1:8000/ to check if the API works properly.

## Example endpoints
There are a couple of examples available in the ExampleController which available on these routes:
* `/examples/integer`
* `/examples/string`
* `/examples/array`
* `/examples/exception`
* `/examples/entity`
* `/examples/validation`
* `/examples/oauth-protected`

### Examples cleanup
In case you do not need the Examples, simply remove all Example files associated with ExampleController.

### Suggestions
Queue Reader Bundle - https://github.com/kununu/queue-reader-bundle

**Note:** There will be a cleanup script available to do this cleanup automatically.
# pi-temp-api
