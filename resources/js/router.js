import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import About from './pages/About';
import Contact from './pages/Contact';
import Posts from './pages/Posts';
import SinglePost from './pages/SinglePost';
import NotFound from './pages/NotFound';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/blog',
            name: 'blog',
            component: Posts
        },
        {
            path: '/posts/:slug', // equivale a Laravel: Route::get('/posts/{slug}', 'Api\PostController@show');
            name: 'single-post',
            component: SinglePost
        },
        {
            path: '/:pathMatch(.*)*', 
            name: 'not-found',
            component: NotFound
        }
    ]
});

export default router