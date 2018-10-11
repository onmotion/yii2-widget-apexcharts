<template>
    <div class="vue-component-root">
        <apexcharts :width="width" :height="height" :type="type" :options="chartOptions" :series="series"></apexcharts>
    </div>
</template>

<script>
    import VueApexCharts from 'vue-apexcharts'

    export default {
        components: {
            apexcharts: VueApexCharts,
        },
        props: {
            chartOptions: Object,
            series: Array,
            type: {
                type: String,
                default: 'area'
            },
            width: {
                type: String,
                default: '100%'
            },
            height: {
                type: String,
                default: '350'
            }
        },
        data: function () {
            return {}
        },

        methods: {

        },
        computed: {

        },
    }
</script>

<style lang="scss">

</style>

<style lang="scss" scoped>

</style>
