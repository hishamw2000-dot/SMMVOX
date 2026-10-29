{% include 'header.twig' %}

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMM VIIP - خدمات SMM</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Tahoma,sans-serif;
}

body{
background:#0a0c10 !important; 
color:#ffffff !important;
padding-bottom: 80px; /* مساحة في الأسفل حتى لا تغطي الأيقونات العائمة على المحتوى */
}

.component_navbar {
background:#0a0c10 !important;
border-bottom: 1px solid #1f2430;
}

.container{
width:95%;
max-width:500px;
margin:auto;
padding:20px 0;
}

/* الاستايل الخاص بالشكل البيضاوي في الأعلى */
.top-badge-wrapper {
text-align: center;
margin-bottom: 15px;
}

.top-badge {
display: inline-block;
background: rgba(255, 159, 26, 0.1);
border: 1px solid #ff9f1a;
color: #ff9f1a;
padding: 6px 20px;
border-radius: 50px; /* يجعل الشكل بيضاوي بالكامل */
font-size: 13px;
font-weight: bold;
letter-spacing: 0.5px;
box-shadow: 0 0 10px rgba(255, 159, 26, 0.2);
}

.hero{
background:#11141d;
border:1px solid #1f2430;
border-radius:15px;
padding:25px;
margin-bottom:20px;
box-shadow: 0 4px 20px rgba(0,0,0,0.4);
}

.hero h1{
font-size:28px;
line-height:1.5;
color:#ff9f1a;
margin-bottom:10px;
text-align: center;
font-weight: bold;
}

.hero h2{
font-size:16px;
line-height:1.5;
color:#ffb347;
margin-bottom:15px;
text-align: center;
font-weight: normal;
}

.hero p{
color:#a0aec0;
line-height:1.8;
margin-bottom:20px;
text-align: center;
font-size: 14px;
}

.form-box{
background:#0d1017;
padding:20px;
border-radius:12px;
border:1px solid #1f2430;
}

.form-box input{
width:100%;
padding:13px;
margin-bottom:12px;
background:#161b26;
border:1px solid #2d3748;
color:#fff;
border-radius:8px;
font-size: 14px;
outline: none;
transition: border-color 0.3s;
}

.form-box input:focus {
border-color: #ff9f1a;
}

.btn{
width:100%;
padding:13px;
background:#ff9f1a;
border:none;
border-radius:8px;
font-size:16px;
font-weight:bold;
color:#0a0c10;
cursor:pointer;
transition: 0.3s ease;
}

.btn:hover {
background:#e08b14;
box-shadow: 0 0 12px rgba(255, 159, 26, 0.4);
}

.forgot-password {
display: block;
text-align: left;
font-size: 13px;
margin-top: -5px;
margin-bottom: 15px;
}

.forgot-password a {
color: #a0aec0;
text-decoration: none;
}

.forgot-password a:hover {
color: #ff9f1a;
}

.signup-redirect-text {
text-align: center;
margin-top: 15px;
font-size: 14px;
color: #a0aec0;
}

.signup-redirect-text a {
color: #ff9f1a;
text-decoration: none;
font-weight: bold;
}

.google-login-box {
margin-top: 15px;
text-align: center;
background: transparent !important;
}

.cards{
display:grid;
gap:15px;
margin:20px 0;
}

.card{
background:#11141d;
border:1px solid #1f2430;
padding:20px;
border-radius:14px;
text-align:center;
}

.icon{
width:50px;
height:50px;
background: rgba(255, 159, 26, 0.1);
border: 1px solid #ff9f1a;
border-radius: 50%;
margin:auto auto 15px;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
color:#ff9f1a;
font-size: 20px;
}

.card h3{
margin-bottom:10px;
color:#ffb347;
font-size: 18px;
}

.card p{
color:#a0aec0;
font-size:14px;
line-height:1.8;
}

.section-title{
text-align:center;
font-size:24px;
margin:40px 0 20px;
color:#ff9f1a;
font-weight: bold;
}

.step{
background:#11141d;
border:1px solid #1f2430;
padding:20px;
border-radius:14px;
margin-bottom:15px;
text-align:center;
color: #e2e8f0;
font-size: 15px;
}

.step-number{
width:40px;
height:40px;
background:#ff9f1a;
border-radius:50%;
margin:auto auto 15px;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
color:#0a0c10;
font-size: 16px;
}

.social{
background:#11141d;
border-radius:14px;
border:1px solid #1f2430;
margin-bottom:15px;
display: flex;
align-items: center;
padding: 15px;
gap: 15px;
}

.social-icon-wrapper {
background: rgba(255, 255, 255, 0.03);
width: 60px;
height: 60px;
border-radius: 12px;
display: flex;
align-items: center;
justify-content: center;
flex-shrink: 0;
border: 1px solid #2d3748;
}

.social-icon-wrapper svg {
width: 32px;
height: 32px;
}

.social-content{
flex-grow: 1;
}

.social h4{
color:#ff9f1a;
margin-bottom: 5px;
font-size: 16px;
text-transform: uppercase;
}

.social p {
color: #a0aec0;
font-size: 13px;
}

.faq{
background:#11141d;
border:1px solid #1f2430;
border-radius:10px;
margin-bottom:10px;
overflow:hidden;
}

.faq-title{
padding:15px;
cursor:pointer;
background:#161b26;
color: #e2e8f0;
font-size: 15px;
font-weight: bold;
transition: background 0.3s;
}

.faq-title:hover {
background: #1f2736;
}

.faq-content{
display:none;
padding:15px;
color:#a0aec0;
line-height:1.8;
font-size: 14px;
background: #0d1017;
border-top: 1px solid #1f2430;
}

.cta{
text-align:center;
padding:40px 20px;
}

.cta h2{
margin-bottom:20px;
color:#ff9f1a;
font-size: 22px;
}

.cta button{
padding:14px 40px;
border:none;
background:#ff9f1a;
border-radius:8px;
font-weight:bold;
color: #0a0c10;
font-size: 16px;
cursor:pointer;
transition: 0.3s ease;
}

.cta button:hover {
background:#e08b14;
box-shadow: 0 0 15px rgba(255, 159, 26, 0.5);
}

/* استايل أزرار التواصل العائمة في الأسفل */
.floating-social-bar {
position: fixed;
bottom: 20px;
left: 50%;
transform: translateX(-50%);
background: rgba(17, 20, 29, 0.85);
backdrop-filter: blur(8px);
border: 1px solid #1f2430;
padding: 10px 20px;
border-radius: 40px;
display: flex;
gap: 15px;
box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
z-index: 9999;
}

.floating-social-item {
width: 40px;
height: 40px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
transition: transform 0.3s, box-shadow 0.3s;
}

.floating-social-item:hover {
transform: translateY(-4px);
}

.floating-social-item.whatsapp { background: #25D366; box-shadow: 0 4px 10px rgba(37, 211, 102, 0.3); }
.floating-social-item.telegram { background: #0088cc; box-shadow: 0 4px 10px rgba(0, 136, 204, 0.3); }
.floating-social-item.tiktok { background: #000000; border: 1px solid #2d3748; box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1); }
.floating-social-item.youtube { background: #FF0000; box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3); }

.floating-social-item svg {
width: 22px;
height: 22px;
fill: #fff;
}

.alert {
padding: 12px;
margin-bottom: 15px;
border-radius: 8px;
font-size: 14px;
text-align: center;
}
.alert-danger {
background: #4a121a;
color: #f8d7da;
border: 1px solid #721c24;
}
.alert-success {
background: #0f3d1e;
color: #d4edda;
border: 1px solid #155724;
}

.bg.block_3.ment, #block_102 {
background: #11141d !important;
color: #a0aec0 !important;
border: 1px solid #1f2430 !important;
border-radius: 10px;
padding: 15px;
}
</style>
</head>
<body>

<div class="container">

<!-- الشكل البيضاوي في الأعلى تماماً -->
<div class="top-badge-wrapper">
    <div class="top-badge">الأرخص والأفضل ⚡</div>
</div>

<div class="hero">
<h1>SMM VIIP</h1>
<h2>خدمات SMM لزيادة المتابعين والمشاهدات بأسعار تنافسية</h2>
<p>نسعى دائماً لتقديم أفضل الخدمات. سر النجاح الرقمي يبدأ بخطوة بسيطة وموثوقة.</p>

{% if errorText %}
    <div class="alert alert-danger">{{ errorText }}</div>
{% endif %}
{% if successText %}
    <div class="alert alert-success">{{ successText }}</div>
{% endif %}

<!-- نموذج تسجيل الدخول -->
<div class="form-box">
    <form method="post" action="https://smmviip.com">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        
        <input type="password" name="password" placeholder="كلمة المرور" required>
        
        <div class="forgot-password">
            <a href="https://smmviip.com/resetpassword">هل نسيت كلمة المرور؟</a>
        </div>

        {% if captcha %}
            <div style="margin-bottom: 15px; text-align: center;">
                <div class="g-recaptcha" data-sitekey="{{ captchaKey }}"></div>
            </div>
        {% endif %}

        <button type="submit" class="btn">تسجيل الدخول</button>
        
        <div class="signup-redirect-text">
            ليس لديك حساب؟ <a href="https://smmviip.com/signup">سجل الآن</a>
        </div>
        
        {% if google_login_content %}
            <div class="google-login-box">
                {{ google_login_content }}
            </div>
        {% endif %}
    </form>
</div>
</div>

<div class="cards">

<div class="card">
<div class="icon">✓</div>
<h3>إجمالي خدماتنا</h3>
<p>1276+ خدمة مفعّلة تلقائياً بالكامل.</p>
</div>

<div class="card">
<div class="icon">✓</div>
<h3>طلبات الموقع</h3>
<p>أكثر من 500K+ طلب تم تنفيذه بنجاح وبأعلى سرعة.</p>
</div>

<div class="card">
<div class="icon">✓</div>
<h3>عملائنا</h3>
<p>أكثر من 11K+ عميل يثقون في منصتنا عالمياً.</p>
</div>

</div>

<h2 class="section-title">لماذا تختار SMM VIIP؟</h2>
<div class="card" style="margin-bottom: 30px;">
    <p style="font-size: 15px; color: #e2e8f0; line-height: 1.8;">
        في SMM VIIP، نضع خدمة العملاء الاستثنائية والسرعة الفائقة كأولوية قصوى. 
        عند تعاملك معنا، <span style="color: #ff9f1a; font-weight: bold;">ستحصل على حماية وأمان بنسبة 100%</span> 
        مع الاستفادة من أرخص وأسرع لوحة SMM متوفرة على الإنترنت.
    </p>
</div>

<h2 class="section-title">ابدأ الآن بأربع خطوات</h2>

<div class="step">
<div class="step-number">1</div>
إنشاء حساب جديد بالمنصة
</div>

<div class="step">
<div class="step-number">2</div>
إضافة الرصيد بدعم تلقائي 24/7
</div>

<div class="step">
<div class="step-number">3</div>
اختيار الخدمة والمنصة المفضلة لديك
</div>

<div class="step">
<div class="step-number">4</div>
متابعة الطلب الفوري عبر لوحة التحكم
</div>

<h2 class="section-title">خدمات المنصات المدعومة</h2>

<!-- انستقرام -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z" stroke="#ff9f1a" stroke-width="2"/><path d="M17.5 6.51h.01" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="social-content">
<h4>INSTAGRAM</h4>
<p>متابعين ثابتين - لايكات فورية - مشاهدات ريلز وتفاعل كامل</p>
</div>
</div>

<!-- تويتر -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="#ff9f1a"/></svg>
</div>
<div class="social-content">
<h4>TWITTER / X</h4>
<p>متابعين مستهدفين - تفاعل - إعجابات وإعادة تغريد</p>
</div>
</div>

<!-- يوتيوب -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#ff9f1a"/></svg>
</div>
<div class="social-content">
<h4>YOUTUBE</h4>
<p>ساعات مشاهدة حقيقية - مشتركين شرعيين - لايكات للبث المباشر</p>
</div>
</div>

<!-- فيسبوك -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3V2z" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="social-content">
<h4>FACEBOOK</h4>
<p>متابعين صفحات وحسابات شخصية - لايكات منشورات - تفاعل مجموعات</p>
</div>
</div>

<!-- تيك توك -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 12a4 4 0 1 0 4 4V2a5 5 0 0 0 5 5" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="social-content">
<h4>TIKTOK</h4>
<p>زيادة متابعين حسابات - مشاهدات إكسبلور سريعة - لايكات حقيقية</p>
</div>
</div>

<!-- تليجرام -->
<div class="social">
<div class="social-icon-wrapper">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22 2-11 11M22 2l-7 20-4-9-9-4Z" stroke="#ff9f1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="social-content">
<h4>TELEGRAM</h4>
<p>أعضاء قنوات ومجموعات - مشاهدات للمنشورات وتفاعل فوري</p>
</div>
</div>

<h2 class="section-title">الأسئلة الشائعة</h2>

<div class="faq">
<div class="faq-title">ما هو السيرفر (SMM panel)؟</div>
<div class="faq-content">هو متجر إلكتروني يتيح لك شراء خدمات التسويق عبر وسائل التواصل الاجتماعي المتنوعة لتعزيز حضورك الرقمي بكفاءة وبأقل الأسعار.</div>
</div>

<div class="faq">
<div class="faq-title">هل استخدام خدماتكم آمن على حساباتي؟</div>
<div class="faq-content">بالتأكيد! جميع خدماتنا آمنة بنسبة 100% ومطابقة للسياسات، ولا تسبب أي ضرر أو حظر لحساباتك الشخصية أو التجارية.</div>
</div>

<div class="faq">
<div class="faq-title">ما هي ميزة الدعم بالتنقيط (Drip-feed)؟</div>
<div class="faq-content">هي أداة متميزة تتيح لك بناء التفاعل بشكل تدريجي وطبيعي. على سبيل المثال: إذا طلبت 1000 إعجاب، يمكنك تقسيمها ليتم تنفيذ 100 إعجاب يومياً على مدار 10 أيام ليظهر التفاعل بشكل طبيعي تماماً.</div>
</div>

<div class="faq">
<div class="faq-title">هل يدعم الموقع الربط عبر الـ API؟</div>
<div class="faq-content">نعم، نوفر اتصال API متكامل ومستقر لجميع الخدمات لتتمكن من إعادة بيع خدماتنا في موقعك الشخصي بكل سهولة وتلقائية.</div>
</div>

{% if contentText2 %}
<div id="block_102" class="bg block_3 ment">
    {{ contentText2 }}
</div>
{% endif %}

<div class="cta">
<h2>جاهز لبدء وتحقيق نجاحك؟</h2>
<button onclick="window.location.href='https://smmviip.com/signup'">ابدأ الآن</button>
</div>

</div>

<!-- شريط أيقونات التواصل الاجتماعي العائم في الأسفل (ضع روابطك في مكان علامة #) -->
<div class="floating-social-bar">
    <!-- واتساب -->
    <a href="https://smmviip.com" target="_blank" class="floating-social-item whatsapp" title="واتساب">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.455 5.703 1.458h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- تليجرام -->
    <a href="https://smmviip.com" target="_blank" class="floating-social-item telegram" title="تليجرام">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.944 0C5.344 0 0 5.344 0 11.944c0 5.622 3.88 10.331 9.089 11.606.095.016.142-.047.142-.111v-.773c-3.32.722-4.017-1.422-4.017-1.422-.544-1.381-1.328-1.75-1.328-1.75-1.084-.741.081-.725.081-.725 1.197.084 1.828 1.231 1.828 1.231 1.066 1.825 2.794 1.297 3.475.991.109-.772.419-1.297.762-1.597-2.65-.303-5.438-1.325-5.438-5.903 0-1.303.466-2.369 1.234-3.203-.122-.303-.534-1.516.116-3.16 0 0 1.003-.322 3.284 1.225a11.392 11.392 0 015.972 0c2.278-1.547 3.278-1.225 3.278-1.225.653 1.644.241 2.856.12 3.16.772.834 1.231 1.9 1.231 3.203 0 4.591-2.794 5.594-5.453 5.894.428.372.812 1.103.812 2.222v3.294c0 .066.047.131.144.112A11.954 11.954 0 0024 11.944C24 5.344 18.656 0 11.944 0z" style="display:none;"/><path d="M23.906 4.146c-.144-.338-.456-.563-.806-.594L1.812 1.574c-.456-.037-.869.219-1.019.65-.15.431.006.913.388 1.182l5.069 3.55 3.244 8.788c.138.375.494.625.894.625h.031c.412-.006.775-.269.913-.656l1.969-5.419 6.206 5.331c.219.188.506.269.781.225.281-.044.525-.206.669-.45L24.1 5.09c.169-.4.094-.856-.194-.944zm-13.6 10.3L8.144 8.356l10.306-4.95-8.144 11.04z" fill="#fff"/></svg>
    </a>

    <!-- تيك توك -->
    <a href="https://smmviip.com" target="_blank" class="floating-social-item tiktok" title="تيك توك">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.03 1.62 4.17.94 1.07 2.27 1.77 3.68 1.97v3.95c-1.47-.05-2.92-.56-4.14-1.39-.4-.27-.77-.59-1.11-.93v6.73c.03 1.93-.57 3.86-1.74 5.4-1.42 1.83-3.64 2.99-5.95 3.11-2.42.11-4.86-.77-6.52-2.54C.63 18.73-.14 16.05.02 13.47c.18-2.88 2.02-5.47 4.75-6.42 1.55-.54 3.23-.55 4.79-.05v4.08c-1.12-.42-2.36-.37-3.44.17-.98.5-1.74 1.4-2.07 2.45-.4 1.32-.12 2.79.76 3.84.84 1 2.12 1.55 3.42 1.47 1.45-.06 2.79-.98 3.39-2.3.26-.58.38-1.21.36-1.85V.02z" fill="#fff"/></svg>
    </a>

    <!-- يوتيوب -->
    <a href="https://smmviip.com" target="_blank" class="floating-social-item youtube" title="يوتيوب">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" fill="#fff"/></svg>
    </a>
</div>

<script>
document.querySelectorAll('.faq-title').forEach(item=>{
item.onclick=()=>{
let content=item.nextElementSibling;

document.querySelectorAll('.faq-content').forEach(x=>{
if(x!==content)x.style.display='none';
});

content.style.display=
content.style.display==='block'
?'none'
:'block';
}
});
</script>

</body>
</html>

{% include 'footer.twig' %}
