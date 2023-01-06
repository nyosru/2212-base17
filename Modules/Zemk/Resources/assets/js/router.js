// import AllPosts from './components/AllPosts.vue'
// import AddPost from './components/AddPost.vue'
// import EditPost from './components/EditPost.vue'

import PageComponent from './view/blocks/15PageComponent.vue'
import NewsListComponent from './view/blocks/10NewsListComponent.vue'
import NewsReadComponent from './view/blocks/11NewsReadComponent.vue'
import UslugiComponent from './view/blocks/07UslugiComponent.vue'
import pageCallToAction1 from './view/blocks/CallToAction1Component.vue'
import pageCallToAction2 from './view/blocks/CallToAction2Component.vue'

export const routes = [{
        name: 'home',
        path: '/',
        components: {
            // default: '',
            // callToAction1: pageCallToAction1,
            uslugi: UslugiComponent,
            // callToAction2: pageCallToAction2,
            // body: NewsListComponent,
        },
    },
    // {
    //     name: 'add',
    //     path: '/add',
    //     component: AddPost,
    // },
    {
        name: 'pages',
        path: '/page/:page',
        components: {
            // default: '',
            body: PageComponent
        },

    },
    {
        name: 'newsList',
        path: '/news/:page(\\d+)?',
        components: {
            // default: '',
            body: NewsListComponent
        },

    },
    {
        name: 'newsRead',
        //only be matched if :id is all numbers
        path: '/news/read/:id(\\d+)',
        components: {
            // default: '',
            body: NewsReadComponent
        },

    },

]