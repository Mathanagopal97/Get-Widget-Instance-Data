# Retrieve the data of all the widgets available in a Magento project

#### Bellow is the question asked in [magento.stackexchage.com](https://magento.stackexchange.com/questions/307037/how-to-get-collection-of-all-the-widgets-created-in-admin-panel):
> In admin panel, I create a widget by choosing it's **Type**, **Design Theme**  and applying the custom widget options. I have not selected any **Layout Updates** for that widget.
>
> Let's say I have created ten widgets of the same type in the above mentioned way.
>
> Now I want to retrieve this collection of widgets and get their custom options. Is there any way to do it?
>
> Refer this [link](https://imgur.com/a/K1gn5ye) for images.

This repository contains the code to do it.

## Solution explanation

1. After digging around in the database, I found that the table named ```widget_instance``` contains the necessary details.
2. So I went ahead and created a **service contract** to access the table and retireve the content form it.
