<template>
  <StripeCheckout pk="sk_test_51JSXveIcrCQMk1JH5XDh3KSdVBqbNsUbUq7JkmMyzfcmMqoMTWYhg9bBQUzVPoW9M37fuBtC0Gq2n6woA0OUWbQA00JEXuXuKb" 
    product="product"
  />
</template>

<script>
import { StripeCheckout } from '@vue-stripe/vue-stripe';
export default {
    components: {
        StripeCheckout,
    },
    data(){
        return{
            product:{  
                name: 'Moby Dick',
                description: 'I love whales',
                amount: 100000 // 100$ in cents
            }
        } 
          
    }
}
</script>

<style>

</style>