from django.contrib.auth.models import User
from .models import SignupForm
from django import forms
from django.contrib.auth.forms import UserCreationForm , AuthenticationForm, UsernameField
from django.utils.translation import gettext, gettext_lazy as _

########## Signupform using models #######################

class UserSignupForm(forms.ModelForm):
    password = forms.CharField(label='Password', widget=forms.PasswordInput())
    
    class Meta:
        models = SignupForm
        fields = ['username','fname','lname','email','password','group','interest','city']
        labels = {'fname':'First_name','lname':'Last_name'}

class CustomForm(forms.Form):
    username = forms.CharField()
    fname = forms.CharField()
    lname = forms.CharField()
    email = forms.EmailField()
    password = forms.CharField()
    group = forms.CharField()
    interest = forms.CharField()
    city = forms.CharField()

# #####################################################signupform using usercreation form###############3
# #Signup Form
# class SignupForm(UserCreationForm):
#     password1 = forms.CharField(label='Password',widget=forms.PasswordInput(attrs={'class':'form-control'}))
#     password2 = forms.CharField(label='Password Again',widget=forms.PasswordInput(attrs={'class':'form-control'}))
#     class Meta:
#         model = User
#         fields = ['username','first_name','last_name','email']
#         labels = {'email' : 'Email'}
#         widgets = {
#             'username':forms.TextInput(attrs={'class':'form-control'}),
#             'first_name': forms.TextInput(attrs={'class':'form-control'}),
#             'last_name' : forms.TextInput(attrs={'class':'form-control'}),
#             'email': forms.EmailInput(attrs = {'class':'form-control'}),
#         }

#Login Form
class LoginForm(AuthenticationForm):
    username = UsernameField(widget= forms.TextInput(attrs={'autofocus':True ,'class':'form-control'}))
    password = forms.CharField( label=_("Password"), strip = False,widget=forms.PasswordInput(attrs={'class':'form-control'}))
        

