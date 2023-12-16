"""Aarvi URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from website import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('home/', views.home, name = 'home'),
    path('home1/', views.home1, name = 'home1'),
    path('home2/', views.home2, name = 'home2'),
    path('login/',views.login_user, name='login'),
    path('signup/', views.Signup, name = 'signup'),
    path('logout/', views.logout_user, name = 'logout'),
    path('profile/', views.profile, name = 'profile'),
    path('about/', views.about, name = 'about'),
    path('blog/', views.blog, name = 'blog'),
    path('blogdetail/', views.blogdetail, name = 'blogdetail'),
    path('contact/', views.contact, name = 'contact'),
    path('product/', views.product, name = 'product'),
    path('productdetail/', views.productdetail, name = 'productdetail'),
    path('shopingcart/', views.shopingcart, name = 'shopingcart'),
]
