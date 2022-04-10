## Teklif Modülü

Sistemde bulunan ürünlere kullanıcıların teklif verebilmesi için bir "Teklif Modülü" oluşturulmak istenmektedir.

1) Yalnızca "Teklif Verilebilir Ürün" olarak seçilen ürünlere teklif verilebilmelidir.
2) Teklif verilirken kullanıcıdan şu alanların girilmesi istenmelidir:
   - a) Hangi ürün için teklif istendiği
   - b) Hangi şehir için teklif istendiği
   - c) Teklif ile ilgili kullanıcının not yazabileceği bir alan (en fazla 250 karakter) (zorunlu değil)
   - d) İletişime geçmek için mail adresi
3) Sistemde tüm teklifler liste halinde görüntülenebilmeli.
4) Yönetici teklifi onaylarken şu alanların girilmesi istenmelidir:
   - a) Onay/Red. Teklif onaylanabilir ya da reddedilebilir. Onaylanırsa fiyat alanı mutlaka girilmelidir. Reddedildiği takdirde fiyat sisteme girilmemelidir.
   - b) Teklif ile ilgili not (en fazla 250 karakter) (zorunlu değil)
   - c) Fiyat
5) Onay/Red işleminden sonra teklif için girilen mail adresine mail gönderilmelidir.

Endpointler şu şekilde olmalıdır:

- create-offer 	=> Teklif oluşturulmak için kullanılır
- list-offer 		=> Teklifleri listelemek için kullanılır (Sisteme girilmiş olan tüm teklifler)
- confirm-offer	=> Teklifi onaylamak/reddetmek için kullanılır

Sizden yapılması istenenler:

- Projeyi Github üzerinden klonlayın
- Uygulamayı ayağa kaldırın (tablolarla birlikte)
- Database Seeder'ları çalıştırın
- Database tablolarını oluşturmak için migration'ları kullanın
- <a href="https://www.mailtrap.io"><code>mailtrap.io</code></a> sitesi üzerinde ücretsiz bir hesap oluşturarak, mail ile ilgili konfigürasyonları tamamlayın. (Mailtrap kullanmak zorunda değilsiniz. Eğer kendi kullandığınız bir smtp sunucusu varsa onu da kullanabilirsiniz.)
- OfferController controller'ını kullanarak istenen uygulamayı geliştirin

Uygulamayı geliştirirken esnek davranabilirsiniz. Ekstra eklemek istediğiniz geliştirmeler olursa çekinmeyin.

Not: Herhangi bir authorization ya da authentication yapmaya gerek yoktur.
