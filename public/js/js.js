 $(document).ready(function(){
            $('.add-to-cart').on('click',function(e){
                e.preventDefault();
                var form =$(this).parent();
                console.log(form.serialize());
                $.ajax({
                    url:form.attr('action'),
                    method:'POST',
                    data:form.serialize(),
                    success: function(data){
                        data=JSON.parse(data);

                        var cartTotal = $('.cartAmount'),
                            cartSize = $('.cartItems'),
                            currentPrice = cartTotal.text(),
                            currentSize = cartSize.text(),
                            totalPrice = (currentPrice*1) + data.price,
                            totalSize = (currentSize*1)+1;


                        cartTotal.text(totalPrice.toFixed(2));
                        cartSize.text(totalSize);
                        console.log(data);
                    },
                    error: function(data){
                        $('html').prepend(data.responseText);
                    }
                });
                // form.ajaxForm({
                //     url:form.attr('action'),
                //     type:'post'
                // });
            });
            
        });