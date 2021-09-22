const express = require('express'),
      app = express();
  app.listen(4000, () => {
    console.log('starting now');
  });
  app.use(express.static('folder'));
