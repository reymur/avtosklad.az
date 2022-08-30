<template>
    <div class="container-lg">
        <div class="d-flex">
            <div class="col-12 d-xl-flex d-lg-flex">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 me-xl-2 me-lg-2 mb-md-2 mb-sm-2">
                    <input
                        v-maska="{ mask: 'Z*', tokens: { 'Z': { pattern: /[а-яА-Я]/ }}}"
                        type="text" class="form-control"
                        placeholder="Marka">
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-md-2 mb-sm-2">
                    <input
                        v-maska="{ mask: 'Z*', tokens: { 'Z': { pattern: /[а-яА-Я]/ }}}"
                        type="text" class="form-control"
                        placeholder="Model">
                </div>



                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mx-xl-4 mb-md-2 mb-sm-2 d-flex">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 me-xl-2 me-lg-2">
                        <input
                            v-maska="{ mask: 'Z*', tokens: { 'Z': { pattern: /[а-яА-Я]/ }}}"
                            type="text" class="form-control"
                            placeholder="Il">
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <input
                            v-maska="{ mask: 'Z*', tokens: { 'Z': { pattern: /[а-яА-Я]/ }}}"
                            type="text" class="form-control"
                            placeholder="Şəhər">
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ml-xl-n3">
                    <RadioToggleButtons
                        v-model='currentValue'
                        :values='values'
                        color='#dd0010'
                        textColor='#000'
                        selectedTextColor='#fff'
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { maska } from 'maska'

export default {
    name: 'App',
    directives: { maska },
    data() {
        return {
            curr: ['Hamısı'],
            values: [
                { label: 'Hamısı', value: '1' },
                { label: 'Yeni', value: '2' },
                { label: 'İşlənmiş', value: '3' },
            ],
            currentValue: ''
        }
    }
};
</script>
