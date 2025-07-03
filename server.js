const express = require('express');
const multer = require('multer');
const cors = require('cors');
const app = express();
const upload = multer({ dest: 'uploads/' });

app.use(cors());

let portfolio = {
  image: '/uploads/default.jpg',
  description: 'Deskripsi awal'
};

app.put('/api/portfolio', upload.single('image'), (req, res) => {
  if (req.file) {
    portfolio.image = `/uploads/${req.file.filename}`;
  }
  if (req.body.description) {
    portfolio.description = req.body.description;
  }
  res.json(portfolio);
});

app.get('/api/portfolio', (req, res) => {
  res.json(portfolio);
});

app.listen(3001, () => console.log('Server running on port 3001'));