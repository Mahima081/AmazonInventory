from mws import mws
import re
import csv

access_key = 'AKIAJP34C7EB5EVOA4LA' #replace with your access key
merchant_id = 'A2BAL6XLDRWVRH' #replace with your merchant id
secret_key = 'GszAVuE4DOXKwEbQlM1M5bxUaaA+1esb7Wc6VGhJ' #replace with your secret key

reportid = '13343548795017923' #replace with report id

x = mws.Reports(access_key=access_key, secret_key=secret_key, account_id=merchant_id)
report = x.get_report(report_id=reportid)
response_data = report.original
response_strdata=response_data.decode('UTF-8')
l1=list(response_strdata.split('\n'))
a=1
for i in range(25):
    l2=list(l1[i].split('\n\r'))
    for j in range(32):
        l3=list(l2[0].split('\t'))
        while True:
          try:
            l3.remove('')
          except ValueError:
            break
        
    print(l3)

    with open('input3.csv', 'a') as csvFile:
        writer = csv.writer(csvFile)
        writer.writerow(l3)

csvFile.close()

    
