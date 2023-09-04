const express = require('express');
const morgan = require('morgan');
const mongoose = require('mongoose');
const PORT = process.env.PORT || 3030;
const blogRoutes = require('./routes/blogRoutes');

//express app
const app = express();

//connect to MongoDB
const DB = 'mongodb+srv://Yashar:33456Yashar@cluster0.wcrhxar.mongodb.net/?retryWrites=true&w=majority';
mongoose.connect(DB)
.then((result)=> app.listen(PORT))
.catch((err)=> console.log(err));



//register view engine
app.set('view engine', 'ejs');


//listen for requests

// app.listen(3000);

//middleware static files makes the folder public
app.use(express.static('public'));
app.use(express.urlencoded({extended: true}));

app.use(morgan('dev'));


//Mongoose and mongo sandbox routes



app.get('/', (req, res)=> {

    res.redirect('/blogs')

   
});



app.get('/about', (req, res)=> {
    res.render('about', {title: 'about'});
    //res.send('<p>about page</p>');
});

app.use('/blogs', blogRoutes);

//blog routes
// app.get('/blogs', (req, res)=> {
//     Blog.find().sort({createdAt: -1})
//     .then((result)=> {
//    res.render('index', {title: 'All Blogs', blogs: result})
//     })
//     .catch((err)=> {
//         console.log(err)
//     })
// });


// app.post('/blogs', (req, res) => {
//  const blog = new Blog(req.body);

//  blog.save()
//  .then((result)=> {
//     res.redirect('/blogs');

//  })
//  .catch((err)=> {
//     console.log(err)
//  })
// })

// app.get('/blogs/create', (req, res)=> {
//     res.render('create', {title: 'create'})
// })



// app.get('/blogs/:id', (req, res)=> {
//     const id = req.params.id;
//     Blog.findById(id)
//     .then(result => {
//         res.render('details', {blog: result, title: 'Blog details'})
//     })
//     .catch(err => {
//         console.log(err)
//     })
// })


// app.delete('/blogs/:id', (req, res)=> {
//     const id = req.params.id;

//     Blog.findByIdAndDelete(id)
//     .then(result => {
//         res.json({redirect: '/blogs'})
     
//     })
//     .catch(err => {
//         console.log(err)
//     })

// })




app.use((req, res)=> {
    res.status(404).render('404', {title: '404'});
});
