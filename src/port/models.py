from django.db import models

# Create your models here.
class User(models.Model):
    name = models.CharField(max_length=250)
    email = models.EmailField(max_length=250)
    phone_number = models.CharField(max_length=20)
    message = models.TextField()

    def __str__(self):
        return self.name