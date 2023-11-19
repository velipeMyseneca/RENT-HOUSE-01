// // this is only data

// let slide_index = 0
// let slide_play = true
// let slides = document.querySelectorAll('.slide')

// hideAllSlide = () => {
//     slides.forEach(e => {
//         e.classList.remove('active')
//     })
// }

// showSlide = () => {
//     hideAllSlide()
//     slides[slide_index].classList.add('active')
// }

// nextSlide = () => slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1

// prevSlide = () => slide_index = slide_index - 1 < 0 ? slides.length - 1 : slide_index - 1

// // pause slide when hover slider

// document.querySelector('.slider').addEventListener('mouseover', () => slide_play = false)

// // enable slide when mouse leave out slider
// document.querySelector('.slider').addEventListener('mouseleave', () => slide_play = true)

// // slider controll

// document.querySelector('.slide-next').addEventListener('click', () => {
//     nextSlide()
//     showSlide()
// })

// document.querySelector('.slide-prev').addEventListener('click', () => {
//     prevSlide()
//     showSlide()
// })

// showSlide()

// // setInterval(() => {
// //     if (!slide_play) return
// //     nextSlide()
// //     showSlide()
// // }, 3000);

// // render products

// let products = [
//     {
//         name: '167 Church St, Toronto, ON M5B 1Y6',
//         image1: 'house1.webp',
//         image2: 'house1.1.webp',
//         old_price: '$1500',
//         curr_price: '30$12000',
//         lifestyle: 'Student'
//     }
// ]

// let product_list = document.querySelector('#latest-products')
// let best_product_list = document.querySelector('#best-products')

// products.forEach(e => {
//     let prod = `
//         <div class="col-3 col-md-6 col-sm-12">
//         <div class="product-card">
//             <div class="product-card-img">
//                 <img src="{{asset('assets/userview/img_house/house1.webp')}}" >
//                 <img src="{{asset('assets/userview/img_house/house1.webp')}}" height="200">
//             </div>
//             <div class="product-card-info">
//                 <div class="product-btn">
//                     <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
//                     {{-- <button class="btn-flat btn-hover btn-cart-add"> --}}
//                         {{-- <i class='bx bxs-cart-add'></i> --}}
//                     </button>
//                     <button class="btn-flat btn-hover btn-cart-add">
//                         <i class='bx bxs-heart'></i>
//                     </button>
//                 </div>
//                 <div class="product-card-name">
//                     ${e.name}
//                 </div>
//                 <div class="product-card-price">
//                     <span class="curr-price">Monthly Rent ${e.curr_price}</span>
//                     <span><del>${e.old_price}</del></span>
//                 </div>
//                 <div class="product-card-Lifestyle">
//                     <span class="curr-price">Lifestle: ${e.lifestyle}</span>                        
//                 </div>
//                 <div class="product-card-Lifestyle see-more-btn">
//                     <a href="">See More Details</a>
//                 </div>
//             </div>
//         </div>
//     </div>
//     `

//     product_list.insertAdjacentHTML("beforeend", prod)
//     best_product_list.insertAdjacentHTML("afterbegin", prod)
// })


