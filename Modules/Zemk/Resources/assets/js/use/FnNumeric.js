// import { ref } from 'vue'

/**
 * цифра наугад от .. и до ..
 * @param {number} min
 * @param {number} max
 * @returns
 */
const randomInteger = (min, max) => {
    // получить случайное число от (min-0.5) до (max+0.5)
    let rand = min - 0.5 + Math.random() * (max - min + 1)
    return Math.round(rand)
}

export default function FnNumeric() {
    return {
        randomInteger,
    }
}