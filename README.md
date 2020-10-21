# Chuck Norris Jokes

Create Chuck Norris jokes within your PHP application.

## Installation

Require the package using composer:

```bash
composer require nkabiru/chuck-norris-jokes
```

## Usage

```php
use Nkabiru\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE)
