<template>
  <!-- <div class="row">
    <div class="col-12 text-center">
      <h1 class="pt-5 pb-5">Использую следующие технологии</h1>
    </div>
  </div> -->
  <div class="row">
    <div class="col-12 imgs_teh text-center" style="margin-bottom: 10vh;">
      <!-- items {{ items }} -->
      <a
        v-for="i in items"
        :key="i.name"
        :title="i.name"
        :href="i.link"
        :style="i.style_a ?? ''"
        target="_blank"
      >
        <img :src="i.img" :class="i.class ?? ''" :style="i.style_img ?? ''" />
      </a>
    </div>
  </div>
</template>

<script>
// import { ref } from "vue";
// import sendTelegramm from "./../use/sendTelegramm.ts";

export default {
  //   props: {
  //     titleFrom: { type: String, default: "x" },
  //   },

  data() {
    return {
      items: [
        
        {
          name: 'Laravel',
          link: 'https://ru.wikipedia.org/wiki/laravel',
          img: '/phpcat/logo/laravel.svg',
        },

        {
          name: 'Vite',
          link: 'https://vitejs.dev/',
          img: '/phpcat/logo/vite.svg',
          class: 'cub',
          style_img: 'max-height: 55px; xpadding-top:2px;',
        },

        {
          name: 'VUE3.js',
          link: 'https://ru.wikipedia.org/wiki/Vue.js',
          img: '/phpcat/logo/vue.svg',
          class: 'cub',
        },

        {
          name: 'NUXT3',
          link: 'https://nuxt.com/',
          img: '/phpcat/logo/nuxt3.svg',          
        },

        {
          name: 'Selenium',
          link: 'https://www.selenium.dev/',
          img: '/phpcat/logo/selenium.png',
          // class: 'cub',
          style_a: '',
          style_img: 'max-height: 55px; padding-top:2px;',
        },

        // {
        //   name: 'IPhone PO (swift)',
        //   link: 'https://developer.apple.com/swift/',
        //   img: '/phpcat/logo/swift.svg',
        // },

        {
          name: 'Swagger',
          link: 'https://swagger.io/',
          img: '/phpcat/logo/swagger.jpg',
          style_img: 'max-height: 80px; padding-top:10px;',
        },

        {
          name: 'HTML',
          link: 'https://ru.wikipedia.org/wiki/html',
          img: '/phpcat/logo/html5.svg',
          class: 'cub',
        },

        {
          name: 'XML',
          link: 'https://ru.wikipedia.org/wiki/XML',
          img: '/phpcat/logo/xml.svg',
        },

        {
          name: 'JSon',
          link: 'https://ru.wikipedia.org/wiki/JSON',
          img: '/phpcat/logo/json.svg',
          class: 'cub',
          style_a: '',
          style_img: 'max-height: 60px; xpadding-top:10px;',
        },

        {
          name: 'Docker',
          link: 'https://ru.wikipedia.org/wiki/Docker',
          img: '/phpcat/logo/docker.svg',
          style_a: '',
          style_img: 'max-height: 60px; xpadding-top:10px;',
        },

        {
          name: 'NPM',
          link: 'https://ru.wikipedia.org/wiki/Npm',
          img: '/phpcat/logo/npm.svg',
          style_a: '',
          style_img: 'max-height: 40px; padding-top:10px;',

        },

        {
          name: 'WebPack',
          link: 'https://ru.wikipedia.org/wiki/Webpack',
          // img: '/phpcat/logo/webpack.svg',
          img: '/phpcat/logo/webpack.png',
        },
        {
          name: 'Python',
          link: 'https://www.python.org/',
          // img: '/phpcat/logo/python.png',
          img: '/phpcat/logo/python.svg',
        },
        {
          name: 'TensorFlow',
          link: 'https://www.tensorflow.org',
          img: '/phpcat/logo/tensorflow.png',
        },

        {
          name: 'Keras',
          link: 'https://keras.io',
          img: '/phpcat/logo/keras.png',
          style_img: 'max-height: 50px; xpadding-top:10px;',
        },

        {
          name: 'Redis',
          link: 'https://redis.io',
          img: '/phpcat/logo/redis.svg',
          style_img: 'max-height: 50px; xpadding-top:10px;',
        },

        {
          name: 'JQuery',
          link: 'https://ru.wikipedia.org/wiki/JQuery',
          img: '/phpcat/logo/jquery.svg',
          style_a: '',
          style_img: 'max-height: 40px; padding-top:5px;',

        },
        {
          name: 'AJAX',
          link: 'https://ru.wikipedia.org/wiki/AJAX',
          img: '/phpcat/logo/ajax.svg',
          style_a: '',
          style_img: 'max-height: 50px; xpadding-top:-10px;',
        },
        {
          name: 'PHP',
          link: 'https://ru.wikipedia.org/wiki/php',
          img: '/phpcat/logo/php.svg',
          style_a: '',
          style_img: 'max-height: 60px; xpadding-top:10px;',
        },
        {
          name: 'Composer',
          link: 'https://ru.wikipedia.org/wiki/Composer',
          img: '/phpcat/logo/composer.png',
        },
        {
          name: 'MySql',
          link: 'https://ru.wikipedia.org/wiki/mysql',
          img: '/phpcat/logo/mysql.png',
        },
        {
          name: 'SqLite',
          link: 'https://www.sqlite.org/index.html',
          img: '/phpcat/logo/sqlite.svg',
        },
        {
          name: 'PostgreSql',
          link: 'https://www.postgresql.org/?&',
          img: '/phpcat/logo/postgresql.svg',
          class: 'cub',
        },
        {
          name: 'JS',
          link: 'https://www.javascript.com/',
          img: '/phpcat/logo/js.svg',
          class: 'cub',
        },
        // {
        //   name: 'NODE.js',
        //   link: 'https://nodejs.org/en/',
        //   img: '/phpcat/logo/nodejs.png',
        // },

        {
          name: 'CSS',
          link: 'https://ru.wikipedia.org/wiki/css',
          img: '/phpcat/logo/css3.svg',
          class: 'cub',
        },
        {
          name: 'TailWind',
          link: 'https://ru.wikipedia.org/wiki/tailwind',
          img: '/phpcat/logo/tailwind.svg',
          style_a: '',
          style_img: 'max-height: 60px; xpadding-top:10px;',
        },
        {
          name: 'Bootstrap',
          link: 'https://ru.wikipedia.org/wiki/Bootstrap',
          img: '/phpcat/logo/Bootstrap.svg',
        },
        {
          name: 'Vuetify',
          link: 'https://next.vuetifyjs.com',
          img: '/phpcat/logo/vuetify.svg',
        },
        {
          name: 'API REST',
          link: 'https://ru.wikipedia.org/wiki/API',
          img: '/phpcat/logo/api_rest.png',
        },
        // {
        //   name: 'Bitrix24',
        //   link: 'https://www.bitrix24.ru',
        //   img: '/phpcat/logo/bitrix.png',
        // },
      ],

      // " alt="MySql" border="1">
      // </a><a href="https://ru.wikipedia.org/wiki/postresql" target="_blank"
      // title="PostgreSQL"><img src="/vendor/didrive/libs/img/logo/postgresql.svg" alt="PostgreSQL"
      // border="1"></a><a href="https://ru.wikipedia.org/wiki/sqlite" target="_blank" title="SQLite">
      // </a><a href="https://ru.wikipedia.org/wiki/postresql" target="_blank"
      // title="PostgreSQL"><img src="/vendor/didrive/libs/img/logo/postgresql.svg" alt="PostgreSQL"
      // border="1"></a><a href="https://ru.wikipedia.org/wiki/sqlite" target="_blank" title="SQLite">
      // <img src="/vendor/didrive/libs/img/logo/sqlite.svg" alt="SQLite" border="1"></a></div>

      // }
      //       formName: "",
      //       formPhone: "",
      //       formMsg: "",
    }
  },

  setup(props) {
    // const result = ref("x");
    // const loading = ref(false);

    return {
      //   result,
      //   loading,
    }
  },

  //   //   mounted() {
  //   //     console.log("Component mounted.");
  //   //   },
  //   methods: {
  //     async formSend() {
  //       //   console.log(2222, this.formName, this.formPhone, this.formMsg);
  //       //   console.log(2222, this.formPhone, this.titleFrom);

  //       this.loading = true;

  //       const { sendToTelegramm } = sendTelegramm();
  //       let ww = await sendToTelegramm(
  //         "Где: " +
  //           this.titleFrom +
  //           "<br>" +
  //           "Как зовут: " +
  //           this.formName +
  //           "<br>" +
  //           "Телефон: " +
  //           this.formPhone +
  //           "<br>" +
  //           "Сообщение: " +
  //           this.formMsg
  //       );
  //       //   console.log('ww',ww);
  //       this.result = ww;
  //     },
  //   },
}
</script>

<style lang="scss" scope>
// .imgs_teh {
//   a {
//     display: inline-block;

//     width: 150px;
//     height: 150px;
//     text-align: center;
//     img {
//       max-width: 130px;
//       max-height: 130px;
//     }
//   }
// }

.imgs_teh {
  a {
    display: inline-block;
    xmax-width: 130px;
    xmax-height: 100px;
    xoverflow: hidden;
    text-align: center;
    margin-right: 3vw;
    margin-bottom: 3vh;

    img {
      xwidth: 200%;
      max-width: 300px;
      max-height: 70px;
      xmargin-right: 2vw;
      min-width: 60px;
      min-height: 30px;

      .cub {
        xmax-height: 50px;
      }
    }
  }
}
</style>
