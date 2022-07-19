# php-captcha
 - 1) İlk olarak session varlığı kontrol edilir. 
-  2) session yoksa oluşturulur ve secur değişkenine atanır.
-  3) session var ise random güvenlik kodu oluşturulup secur değişkenine atanır.
-  4) kullanıcı sayfaya ilk girdiğinde session bilgisi olmayacaktır. hali ile 2. madde çalışacaktır.
-  5) session bilgisi şu an oluştu ve biz session verisini silene kadar o değer korunacak.
-  6) bundan sonra karar yapıları ile kontrolleri sağlıyoruz mesaj gönderim işlemi bittikten sonra
session bilgisini siliyoruz. bunun nedeni yeni kod üretmek istememiz.
-  7) son olarak başka bir sayfaya yönlenip oradan iletişim sayfasına tekrar yönleniyoruz. Bunun sebebi : 
session bilgisini sonda sildik fakat sayfa yeniden yüklenene kadar görünürde oluşturulmuş sondan bir önceki
güvenlik kodunu görebiliriz. Bu yönlenme işlemlerini yapmazsak her submit dediğimizde sayfa yeniden çalışacak bizim girdiğimiz kod eski olduğundan amacımıza ulaşamayacağız.