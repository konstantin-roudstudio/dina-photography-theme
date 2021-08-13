# CSS & JS compilation

## First time initialization
Install all dependencies
```
npm install
```

## Configure BrowserSync
Copy `local-config.sample.js` and name it `local-config.js`.
In this new file set `proxy` variable to your local URL of WP instance. 

## Start development
To start watching the files adn launch BrowserSync
```
npm run dev
```

## Lint CSS
Before pushing changes make sure you have clean and consistent CSS. Run [stylelint](https://stylelint.io/) with the command:
```
npm run lint:css
```
