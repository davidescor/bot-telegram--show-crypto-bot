## Telegram : @ShowCryptoBot
![ShowCryptoBot](http://davidespier.com/github/ShowCryptoBot/ShowCryptoBot.png)

# @ShowCryptoBot
You can ask for a cryptocurrency without having to put a command.<br> For example <strong> bitcoin </strong>, or also by symbol <strong> btc </strong>.

## Requirements

- Hosting, domain and certificate ssl.


## Installation

1. Search <strong>@botfather</strong> in Telegram.

2. In the botfather chat write <strong>/newbot bot_name</strong>.

3. Search and copy key in <strong>core/config.php</strong>.


```bash

	$botToken = "***********************************";

```

4. In the browser you have to set the path of the telegram api for the <strong>request.php</strong> file.<br>
      Exchange token for your api token and change url for your domain, mandatory to have ssl certificate.


```bash

  api.telegram.org/botTOKEN/setwebhook?url=https://url/request.php


```

5. Search your bot in Telegram and run.


## Authors


 *Developed by*  **David Espier**


[Personal website](https://davidespier.com)

[Alexa skills](https://www.amazon.es/s?k=davidespier&i=alexa-skills)
        
[Other projects](https://github.com/davidespier?tab=repositories)



## License


[MIT License](https://choosealicense.com/licenses/mit/) © davidespier.com
