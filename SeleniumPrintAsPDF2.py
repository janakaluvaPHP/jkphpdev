import json
from selenium import webdriver
chrome_options = webdriver.ChromeOptions()
settings = {"recentDestinations": [{"id": "Save as PDF", "origin": "local", "account": ""}], "selectedDestinationId": "Save as PDF", "version": 2}
prefs = {'printing.print_preview_sticky_settings.appState': json.dumps(settings)}
chrome_options.add_experimental_option('prefs', prefs)
chrome_options.add_argument('--kiosk-printing')
# driver = webdriver.Chrome(executable_path="C://temp//chromedriver.exe")
browser = webdriver.Chrome(executable_path="C://temp//chromedriver.exe", options=chrome_options)
browser.get("https://www.makemytrip.com/")
browser.execute_script('window.print();')
# browser.close() 

