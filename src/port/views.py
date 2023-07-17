from django.shortcuts import render, redirect
from django.contrib import messages
from .forms import ContactForm

def port(request):
    if request.method == "POST":
        form = ContactForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Your message was sent successfully!')
            return redirect('port')
    else:
        form = ContactForm()

    return render(request, 'port.html', {'form': form})

