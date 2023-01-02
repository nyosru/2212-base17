import { ref } from 'vue'

const steps = ref(false)

/**
 * чистка массива хлебных крошек
 */
const breadcrumbsClean = () => {
    steps.value = []
}

/**
 * добавление 1 шага в шаги хлебных крошек
 * @param {*} data 
 */
const breadcrumbsAddStep = (
    data = { nameLink: '', to: '', active: false }
) => {
    steps.value.push({
        name: data.nameLink,
        to: data.to,
        active: data.active,
    })
}


/**
 * создание шагов для хлебных крошек (с ноля)
 * @param {*} stepsNew 
 */
const breadcrumbsCreate = async(stepsNew = []) => {
    breadcrumbsClean()
    await stepsNew.forEach((el) => {
        breadcrumbsAddStep(el)
    })
}


export default function Breadc() {
    return {
        steps,
        breadcrumbsClean,
        breadcrumbsAddStep,
        breadcrumbsCreate,
    }
}