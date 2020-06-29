import AllBooks from './components/AllBooks.vue';
import AddBook from './components/AddBook.vue';
import EditBook from './components/EditBook.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';

export const routes = [
    {
        name: 'login',
        path: '/',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'all',
        path: '/allbooks',
        component: AllBooks
    },
    {
        name: 'add',
        path: '/add',
        component: AddBook
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBook
    }
];