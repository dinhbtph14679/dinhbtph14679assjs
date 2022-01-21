var mang_anh = ["./../Image/banner1.jpg","./../Image/banner2.jpg","./../Image/banner3.jpg","./../Image/banner4.jpg"]
    var img = document.getElementById("img_banner")
    var number = 0;
    var tudong = setInterval(() => {
        number++
        if (number >= mang_anh.length) {
            number = 0;
        }
        img.src = mang_anh[number]
    }, 1500);