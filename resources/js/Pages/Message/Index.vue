<template>
    <div class="col-lg-12 text-center">

        <div>
            <input type="text" v-model="body" placeholder="your messages" class="rounded-full border-y-gray-400 mb-4">
        </div>
        <div>
            <a @click.prevent = store href="#" class=" rounded-lg py-2 w-40 bg-sky-400 text-white mb-4">Отправить</a>
        </div>
        <div v-if="messages.length>0" class="text-center">
            <h3>
                Messages
            </h3>
        </div>
        <div>
            <div v-for="message in messages" class="text-sm pb-2 mb-2 border-b border-gray-300">
                <p>{{message.id}}</p>
                <p>{{message.body}}</p>
                <p class="text-right">{{message.time}}</p>
            </div>
        </div>

    </div>

</template>
<script>
export default {
    name:'Index',
    props: [
        'messages'
    ],
    data(){
        return {
            body: ''
        }
    },
    methods: {
        store(){
            axios.post('/messages',{body:this.body})
                .then(res=>{
                    this.messages.unshift(res.data)
                })
        }
    }
}
</script>
<style scoped>

</style>
