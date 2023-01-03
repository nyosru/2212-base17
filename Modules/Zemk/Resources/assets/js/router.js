// import AllPosts from './components/AllPosts.vue'
// import AddPost from './components/AddPost.vue'
// import EditPost from './components/EditPost.vue'

import NewsListComponent from './view/blocks/10NewsListComponent.vue'
import NewsReadComponent from './view/blocks/11NewsReadComponent.vue'

export const routes = [{
        name: 'home',
        path: '/',
        components: {
            // default: '',
            pageBody: NewsListComponent
        },
    },
    // {
    //     name: 'add',
    //     path: '/add',
    //     component: AddPost,
    // },
    {
        name: 'newsList',
        path: '/news/:page(\\d+)?',
        components: {
            // default: '',
            pageBody: NewsListComponent
        },

    },
    {
        name: 'newsRead',
        //only be matched if :id is all numbers
        path: '/news/read/:id(\\d+)',
        components: {
            // default: '',
            pageBody: NewsReadComponent
        },

    },

]