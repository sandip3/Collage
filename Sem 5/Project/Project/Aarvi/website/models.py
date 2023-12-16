from django.db import models

REGISTRATION_CHOICES = {
    ('Buyer','Buyer'),
    ('Seller','Seller'),
}


class SignupForm(models.Model):
    username = models.CharField(max_length=100)
    fname = models.CharField(max_length=100)
    lname = models.CharField(max_length=100)
    email = models.EmailField()
    password = models.CharField(max_length=100)
    group = models.CharField(max_length= 100, default=None,null=True)
    interest = models.CharField(max_length=100,default=None,blank=True,null=True)
    city = models.CharField(max_length=100,default=None,blank=True,null=True)

class contactpage(models.Model):
    email = models.EmailField()
    message = models.TextField()
        