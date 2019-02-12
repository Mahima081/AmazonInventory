from mws import mws
import xml.etree.ElementTree as ET

access_key = 'AKIAJP34C7EB5EVOA4LA' #replace with your access key
merchant_id = 'A2BAL6XLDRWVRH' #replace with your merchant id
secret_key = 'GszAVuE4DOXKwEbQlM1M5bxUaaA+1esb7Wc6VGhJ'
uri='http://mws.amazonaws.com/FulfillmentInventory/2010-10-01/'
auth_token='amzn.mws.78a650f0-576f-83d7-fb47-8a4b7e20c4d2'
version='2010-10-01'
domain='mws.amazonservices.com'
sku=["FBAB011I4APRE","FBAB0195V52J8"]
token='H4sIAAAAAAAAADXPS26CQAAA0KsYUlcs+MpIUpoADgMWUGCqA7sRlI9g5afI6eum7wbvs+xP18Uz6zTmQuv+zCyaQWOWH0tb7h39nyXupKA1A8NAEl80PHe4PeO+L8y8vrrtIYxSyhfk2EeTwvpRl7oK8DjP304iRfPBL+VkXlnZzV6TCZapTpMwmyezvbLKat6MDRKOtMX7mlSeQjG4mOfGysNR1ncAZdyKoqxru1x6FHcFWKNYVDc+KYeNtIWVgHFIVNlhERyCLgR76752d+w3IKCM01iuuhkm8bD138XXyXUE9YxfyIiJF5Dm51i1Ko4jCCOch+mv8lAvk/i0Od0WTKQbZgDfeU1juK8/XSofbSgBAAA=_mEaNrCkReYPtTpElDaMcKeP_ATVPDKIKX0DER'

x = mws.Inventory(access_key=access_key, secret_key=secret_key
                  , account_id=merchant_id)
report = x.list_inventory_supply_by_next_token(token)
response_data=report.original
print (response_data)

file = open("inventory1.xml","w") 
 
file.write(response_data)
file.close()


