import { ref } from 'vue'
import md5 from 'md5'

import axios from 'axios'

const data = ref({})
const loading = ref(true)
const errored = ref(false)
    // const sended = ref(false);

const get = async() => {
    let res = await axios.get('/api/bill/photo')
        .catch((error) => {
            errored.value = true
                // console.log('error', error)
            return 'errored'
        })
        // console.log('res', res);
    data.value = await res.data

    if (data.value && data.value.length > 0) {
        loading.value = false
    } else {
        loading.value = false
        errored.value = true
    }

}

// const deleteItem = async(id) => {
//     let res = await axios
//         .delete('/api/news/' + id)
//         .then((response) => {
//             console.log(response.data.message)
//             getNews()
//         })
//         .catch((error) => console.log(error))

//     console.log('news', 'deleteItem', res)
// }

// const addNews = async(head, date, text, file = '', link = '') => {
//     const config = { 'content-type': 'multipart/form-data' }
//     const formData = new FormData()
//     formData.append('head', head)
//     formData.append('date', date)
//     formData.append('text', text)
//     if (file != '') {
//         formData.append('attachment', file)
//     }
//     if (link != '') {
//         formData.append('link', link)
//     }

//     let res = await axios
//         .post('/api/news', formData, config)
//         .then((response) => console.log(response.data.message))
//         .catch((error) => console.log(error))

//     console.log('res', res)

//     // let res = await axios
//     //     // await axios
//     //     .post('/api/news'
//     //         ,
//     //         {
//     //             head,
//     //             date,
//     //             text
//     //             //         domain: window.location.hostname,
//     //             //         // show_datain: 1,
//     //             //         answer: 'json',

//     //             //         // s: md5('1'),
//     //             //         s: md5(window.location.hostname),

//     //             //         // id: 1,
//     //             //         id: [
//     //             //             360209578, // ??
//     //             //             // 1368605419, // ?? ????????
//     //             //             2037908418 // ?????? ????????????????
//     //             //         ],
//     //             //         msg
//     //         }
//     //     )
//     //     .catch((error) => {
//     //         console.log("error", error);
//     //         return 'errored';
//     //     });

//     // news_data.value = await res.data.result;

//     // console.log('fff',res);

//     //     if (res.data.res === true) {
//     //         loading.value = true;
//     //         data.value = true;
//     //         return 'sended';
//     //     } else {
//     //         errored.value = true;
//     //         return 'errored';
//     //     }
// }

export default function PhotosJs() {
    //   const response = ref()

    // const request = async () => {
    //     const res = await fetch(url, options)
    //     response.value = await res.json()
    // }

    return {
        get,
        // deleteItem,
        // addNews,
        data,
        // getNews,
        errored,
        // // news,
        // // sendToTelegramm,
        loading,
        // response,
        // request
    }
}