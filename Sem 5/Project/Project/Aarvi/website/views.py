from django.shortcuts import render, redirect,HttpResponseRedirect
from django.contrib.auth.models import User, auth
from .forms import LoginForm, CustomForm
from django.contrib import messages
from django.contrib.auth.forms import AuthenticationForm
from django.contrib.auth import authenticate,login,logout
from website.models import SignupForm,contactpage
from django.contrib.auth.hashers import make_password
# Home View Function
def home(request):
    return render(request,'core/home.html')

# Home1 View Function
def home1(request):
    return render(request,'core/home1.html')

# Home2 View Function
def home2(request):
    return render(request,'core/home2.html')

##############Signup Form View Set using HTML Form##########

def Signup(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        checkusername = SignupForm.objects.filter(username=username).exists()
        if not checkusername:
            fname = request.POST.get('fname')
            lname = request.POST.get('lname')
            email = request.POST.get('email')
            if email.endswith("@gmail.com"):
                password = make_password(request.POST.get('password'))
                group = request.POST.get('group')
                interest =[]
                if group == 'buyer':
                    interest = request.POST.getlist('interest')
                city = request.POST.get('city')
                fm = SignupForm(username=username,fname=fname,lname=lname,email=email,password=password,group=group,interest=interest,city=city)
                fm.save()
            else:
                messages.success(request,"This email does not match the @gmail.com format.:!!!")
        else:
            messages.success(request,"This username is already exist please try another username::!!!")
    
    return render(request,'core/signup.html')


    # return render(request, 'core/signup.html')
    # custom_form = UserSignupForm()
    # if request.method == 'POST':
    #     custom_form = UserSignupForm(request.POST)
    #     if custom_form.is_valid():
    #         custom_form = SignupForm
    #     else:
    #         print(custom_form.cleaned_data)
    # cont ={'fm':custom_form}
    # return render(request,'core/signup.html',cont)

### viewset Signup form using User creation form############
# #Signup View Function
# def Signup(request):
#     if request.method == 'POST':
#         fm = SignupForm(request.POST)
#         if fm.is_valid():
#             messages.success(request, 'Congratulation ! Signup Successfully !!')
#             fm.save()
#             fm = SignupForm()
#     else:
#         fm = SignupForm()
#     return render(request,'core/signup.html',{'form':fm})

# Login View Function
def login_user(request):
    if not request.user.is_authenticated:
        if request.method == 'POST':
            fm = LoginForm(request=request,data=request.POST)
            if fm.is_valid():
                uname = fm.cleaned_data['username']
                upass = fm.cleaned_data['password']
                user = authenticate(username=uname,password=upass)
                if user is not None:
                    login(request,user)
                    messages.success(request,'Login Successfully!!!!')
                    # print("you are login successfully!!!!!")
                    return HttpResponseRedirect('/home/')
        else:
            fm = LoginForm()
        return render(request , 'core/loginp.html',{'form':fm})
    else:
        return HttpResponseRedirect('/home/')
        # print("this is login else part")  

# Logout View Function
def logout_user(request):
    logout(request)
    return HttpResponseRedirect('/login/')

# About View Function
def about(request):
    return render(request,'core/about.html')

# Blog Main View Function
def blog(request):
    return render(request,'core/blog.html')

# Blog Detail View Function
def blogdetail(request):
    return render(request,'core/blogdetail.html')

# Contact Information View Function
def contact(request):
    if request.method == 'POST':
        email = request.POST.get('email')
        message = request.POST.get('message')
        msg_detail = contactpage(email=email,message=message)
        checkemail = SignupForm.objects.filter(email=email)
        if checkemail.exists():
            msg_detail.save()
            messages.success(request,"OK !! , Your message has been send and we'll revertback to you!")
            return HttpResponseRedirect('/contact/')
        else:
            messages.error(request,"Email does not match , please signup first !!!")
            return HttpResponseRedirect('/signup/')
    else:
        return render(request,'core/contact.html')

# Product View Function
def product(request):
    return render(request,'core/product.html')

# Product Information View Function
def productdetail(request):
    return render(request,'core/productdetail.html')

# Shopping View Function
def shopingcart(request):
    return render(request,'core/shopingcart.html')

def profile(request):
    return render(request,'core/profile.html')
    