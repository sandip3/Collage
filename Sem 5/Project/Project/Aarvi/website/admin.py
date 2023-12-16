from django.contrib import admin
from .models import SignupForm,contactpage
# Register your models here.

@admin.register(SignupForm)
class Signupadmin(admin.ModelAdmin):
    list_display =['username','fname','lname','email','password','group','interest','city']

@admin.register(contactpage)
class contactadmin(admin.ModelAdmin):
    list_display = ['email','message']