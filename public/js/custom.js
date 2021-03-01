// Owl Carousel Start..................

$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
               items:1
            },
            600:{
               items:1
            },
            1000:{
               items:1
            }
        }
    });

});





// Owl Carousel End..................


// click send button

$('#sendmsgid').click(function (){

    let name = $('#contactnameid').val();
    let mobile = $('#contactmobileid').val();
    let mail = $('#contactemailid').val();
    let msg = $('#contactmsgid').val();

    insertContact(name,mobile,mail,msg);
});

insertContact = function (name,mobile,mail,msg){

    if(name.length===0)
    {
        $('#sendmsgid').html('দয়া করে আপনার নাম লিখুন');
        setTimeout(function (){
            $('#sendmsgid').html('পাঠিয়ে দিন');
        },2000);
    }
    else if(mobile.length === 0)
    {
        $('#sendmsgid').html('দয়া করে আপনার মোবাইল নাম্বার লিখুন');
        setTimeout(function (){
            $('#sendmsgid').html('পাঠিয়ে দিন');
        },2000);
    }
    else if(mail.length === 0)
    {
        $('#sendmsgid').html('দয়া করে আপনার ইমেইল লিখুন');
        setTimeout(function (){
            $('#sendmsgid').html('পাঠিয়ে দিন');
        },2000);
    }
    else if(msg.length === 0)
    {
        $('#sendmsgid').html('দয়া করে আপনার বার্তা লিখুন');
        setTimeout(function (){
            $('#sendmsgid').html('পাঠিয়ে দিন');
        },2000);
    }else {

        let data = {
            name:name,
            mobile:mobile,
            mail:mail,
            msg:msg
        }

        axios.post('/contactinsert',data).then(function (response){

            if(response.status === 200){
                if(response.data === 1){
                    $('#sendmsgid').html('আপনার অনুরধ সফল হয়েছে');
                    setTimeout(function (){
                        $('#sendmsgid').html('পাঠিয়ে দিন');
                    },2000);
                }else {

                }
            }else {
                $('#sendmsgid').html('আবার চেসতা করুন');
                setTimeout(function (){
                    $('#sendmsgid').html('পাঠিয়ে দিন');
                },2000);
            }

        }).catch(function (error){
            $('#sendmsgid').html('আবার চেসতা করুন');
            setTimeout(function (){
                $('#sendmsgid').html('পাঠিয়ে দিন');
            },2000);
        });
    }

}
