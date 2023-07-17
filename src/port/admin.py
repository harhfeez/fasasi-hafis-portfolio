from django.contrib import admin
from .models import User
from .forms import ContactForm

class ContactMessageAdmin(admin.ModelAdmin):
    form = ContactForm
    list_display = ("name","email", "message")

admin.site.register(User, ContactMessageAdmin)
