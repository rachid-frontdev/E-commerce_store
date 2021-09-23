const express = require('express'),
      app = express();
  app.listen('3000', () => console.log('server run'));
  app.use(express.static('folder'));
