local function Reply(msg)
local text = msg.content_.text_
if not database:get(bot_id..'Reply:Status'..msg.chat_id_) then
if text == 'هلو' then
TextReply = 'هِہ‌‏لَآوُآتُ نوُرتُ/نوُرتُي 🍃✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شخباركم' then
TextReply = 'طٌـيـبّهِہ‌‏ آخٌبّآرنهِہ‌‏ مِـثًلَ طٌـلَتُگ آلَحلَوُ‌‏هِہُ‌‏ُُ 🍂✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شلونكم' then
TextReply = 'آني عَن نفُسًـي زيـن حبّيـبّي آسًـأل آلَحلَوُيـن بّعَدُ ✨🍂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شلونك' then
TextReply = 'تُحتُ رحمِـهِہ‌‏ آلَلَهِہ‌‏ ✨نسًـألَ عَنگ /عَنجَ 🙊✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'تمام' then
TextReply = 'تُمِـآمِ آن شّـآء آلَلَهِہ‌‏ آلَآمِـوُر گلَهِہ‌‏آ تُمِـآمِ 🧑‍🦯ء✨🍃'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'هلاو' then
TextReply = 'هِہ‌‏لَآ وُغّلَآ بّآلَطٌـشّ وُآلَرشّ 🦋✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'مرحبا' then
TextReply = 'مِـرآحبّ وُردُهِہ‌‏ نوُرتُنهِہ‌‏ /نوُرتُيـنهِہ‌‏  ✨🥀🌹'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😐' then
TextReply = 'شبيك صافن ولك😌👌'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'هاي' then
TextReply = 'هايات صبوله جاي لهل حلو 😌💜'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شلونك' then
TextReply = 'تُحتُ رحمِـهِہ‌‏ آلَلَهِہ‌‏ ✨نسًـألَ عَنگ /عَنجَ 🙊✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اريد اكبل' then
TextReply = 'شوفلي وياك وحده😂👻'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'لتزحف' then
TextReply = 'لصير لوكي ونجب😪🤞'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'كلخرا' then
TextReply = 'انتا خرا يا خرا😉👻'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'زاحف' then
TextReply = 'زاحف علي خالتك الشكره 🥺💙😹'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'دي' then
TextReply = 'خليني احبك 😌👋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'فرخ' then
TextReply = 'ماكو غيرك فرخ😹💓'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'تعالي خاص' then
TextReply = 'هلو لصير زاحف ونجب😹👻'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اكرهك' then
TextReply = 'اني هم اكرهك😾😿'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'سلام عليكم' then
TextReply = 'وُعَلَيـگمِ آلَسًـلَآمِ آلَمِرتُبّ/آلَمِـرتُبّهِہ‌‏ ✨💐'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'احبك' then
TextReply = 'اني هم احبك/ج 💜واليحب بلوه🤤'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'باي' then
TextReply = 'وُيـن حتُخٌلَيـني وُحدُي 🥺✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'واكف' then
TextReply = 'شنو هوه واكف😶😑'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'فدوه' then
TextReply = 'آني آروُح فُدُوُهِہ‌‏ آلَگ /آلَجَ حيـآتُي 🦋✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'وين المدير' then
TextReply = 'ليش محتاج شي منه 😉😁'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'انجب' then
TextReply = 'عَلَيـگ😒عَيـبّ هِہ‌‏لَگلَآمِ آلَآعَضـآء مِـوُجَوُدُيـن 😠'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'تحبني' then
TextReply = 'يي احبك غير انت/ي العشق ❤🦋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🌚' then
TextReply = 'مِـفُحمِ حبّيـبّي🙊😹شّـنوُ آلَمِـصِـيـبّهِہ‌‏ آلَجَدُيـدُهِہ‌‏ آلَي مِـسًـوُيـهِہ‌‏آ 🍃🙊😹'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'هههههه' then
TextReply = 'دُوُمِ آلَضـحگهِہ‌‏ عَ وُجَهِہ‌‏گ/جَ آلَلَطٌـيـفُ✨🍃'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اجيت' then
TextReply = 'آحلَى وُآرقَى جَيـهِہ‌‏ 🥺فُدُوُهِہ‌‏ لَجَمِـآلَگ لَجَمِـآلَجَ ✨🍂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🙄' then
TextReply = 'نزلَ/نزلَي عَيـوُنگ/جَ شّـگوُ فُوُگ وُتُبّآوُعَوُن 🤷‍♂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😒' then
TextReply = 'شّـبّيـگ/جَ ضـآيـجَ/ضـآيـجَهِہ‌‏ عَمِـري 🥺 ✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😳' then
TextReply = 'هِہ‌‏آآ عَيـني بّسً لَآ آخٌتُرعَتُ/آخٌتُرعَتُي آسًـمِ آلَلَهِہ‌‏ عَلَيـگ/ج🍃🙊😹'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🙁' then
TextReply = 'ها شنو عافتك حبيبتك 😉😂'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🚶💔' then
TextReply = 'ضايج الحلو 😆👋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🙂' then
TextReply = 'شّـبّيـگ/جَ هِہ‌‏يـج جَآمِـدُ/جَآمِـدُهِہ‌‏ 🤷‍♂😕😡'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😘' then
TextReply = 'عَسًـلَ مِـثًلَگ /مِـلَثًجَ حيـﮯآتي✨💋🙊'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🌝' then
TextReply = 'شّـهِہ‌‏لَبّيـآض هِہ‌‏ذٌآ ✌️فُدُوُهِہ‌‏ مِـنوُر/مِـنوُرهِہ‌‏ 🍃✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'مح' then
TextReply = 'شّـنوُوُ هِہ‌‏لَعَسًـلَ 🥺فُدُيـتُ ✨💋🙊'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'ورده' then
TextReply = 'عَطٌـرهِہ‌‏آ آنتُ/آنتُي قَلَبّيـﮯ ‌‏وُغّرآضهِہ‌‏✨🍃💋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'صباحو' then
TextReply = 'صباح الفل😻🙊'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'صباح الخير' then
TextReply = 'صِـبّآح آلَنوُر وُآلَهِہ‌‏نآ وُآلَسًـروُر صِـبّآح سًـعَيـدُ فُي يـوُمِ جَدُيـدُ 💜✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'كفو' then
TextReply = 'منك حبيبي😉👌'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '🤔' then
TextReply = 'بّشّـنوُوُ تُفُگر حبّ هِہ‌‏آآآ هِہ‌‏آآآ 😏✨😹🍃'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😌' then
TextReply = 'مِـرتُآح آلَحلَوُوُ آوُوُي فُدُوُهِہ‌‏ لَحدُ يـحآجَي آلَيـوُمِ🙊😹✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اها' then
TextReply = 'يب حبي قابل اغشك😉👋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شسمج' then
TextReply = 'اسمها جاسميه😻😹'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شسمك' then
TextReply = 'اسمه ابو راس 😻🤙'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شوف' then
TextReply = 'ششوف حبي😑👋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'مساء الخير' then
TextReply = 'مِـسًـآء آلَعَآفُيـهِہ‌‏ يـلَعَآفُيـهِہ‌‏ آنتُ/ي 🥺✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'المدرسه' then
TextReply = 'دنجب صاير شاطر😹💝'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'منو ديحذف رسائلي' then
TextReply = 'خالتكك😹🤟'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'البوت واكف' then
TextReply = 'دنجب ابو خلك😂☺️'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'غلس' then
TextReply = 'علي شنو اغلس😉🤞'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'حارة' then
TextReply = 'اي والله حيل حاره😑😆'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'هههه' then
TextReply = 'دومها حبي 🤟😻'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'ههههه' then
TextReply = 'فدوه لهل ضحكه 🥺😍'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😹' then
TextReply = 'قرد ويضحك😂👐'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'وين' then
TextReply = 'عَندُي شّـغّلَ حبّيـبّي آگمِـلَ وُآجَيـگ 🦋🥺'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'كافي لغوة' then
TextReply = 'انتا انجب😹🤟'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'نايمين' then
TextReply = 'امشي كعدهم 😹😑'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اكو احد' then
TextReply = 'اني موجود 😉👋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'فديت' then
TextReply = 'فداك/ج ثولان العالم😹💝'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شكو ماكو' then
TextReply = 'مِـآگوُ شّـي جَدُيـدُ حبّي گآعَدُ وُيـآگمِ آلَآخٌبّآر يـمِـگ/جَ🤷‍♂🙊😹✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'شكو' then
TextReply = 'آلَعَآفُيـهِہ‌‏ وُآهِہ‌‏لَهِہ‌‏آ غّيرگ/جَ بّآلَگلَبّ مِـآگوُ 🥺🍃'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == '😏' then
TextReply = 'عَدُلَ حلَگ/جَ حيـآتُي لَتُصِـيـر/تُصِـيـريـن خٌبّيـثً/خٌبّيـثًهِہ‌‏ 🙊😹✨'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'اوف' then
TextReply = 'اوفات حبي😻💘'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'احبج' then
TextReply = 'وُآني هِہ‌‏مِ آحبّهِہ‌‏آ 🥺🍃بّسً آگثًر مِـنگ/مِـنجَ💋'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
if text == 'انتة منو' then
TextReply = 'اني بوت👻😾'
send(msg.chat_id_, msg.id_,'['..TextReply..']')
return false
end
end

if text == 'تفعيل ردود البوت' and Manager(msg) then
database:del(bot_id..'Reply:Status'..msg.chat_id_)
send(msg.chat_id_, msg.id_,'🚸| تم تفعيل ردود البوت')
return false
end

if text == 'تعطيل ردود البوت' and Manager(msg) then
database:set(bot_id..'Reply:Status'..msg.chat_id_,true)
send(msg.chat_id_, msg.id_,'🔰| تم تعطيل ردود البوت')
return false
end

end
return {
poyka = Reply
}
