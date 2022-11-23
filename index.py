from selenium import webdriver
from selenium.webdriver.common.keys import Keys

PATH = "/Users/frangarcia/Downloads/chromedriver 2"
driver = webdriver.Chrome(PATH)

driver.get("https://app.smartsheet.com/b/form/9d1e6f5aab0d43cab2fa8548c787365d")

search = driver.find_element_by_id("date_AHL Creation Date")
search.send_keys("06/08/2021")

search = driver.find_element_by_id("select_input_Fault Station")
search.send_keys("ALC")
search.send_keys(Keys.ENTER)

search = driver.find_element_by_id("date_Flight Date")
search.send_keys("06/08/2021")

search = driver.find_element_by_id("text_box_Flight Number")
search.send_keys("FR1111")

search = driver.find_element_by_id("text_box_Flight Route")
search.send_keys("ALCAGP")

search = driver.find_element_by_id("text_box_Pax PNR")
search.send_keys("XXX1234")

search = driver.find_element_by_id("text_box_AHL reference number")
search.send_keys("ZZZ1234")

search = driver.find_element_by_id("text_box_Quantity")
search.send_keys("1")

search = driver.find_element_by_id("select_input_RL code")
search.send_keys("00 PENDING / TBC")
search.send_keys(Keys.ENTER)

search = driver.find_element_by_id("select_input_Fault Area")
search.send_keys("FOH")
search.send_keys(Keys.ENTER)

search = driver.find_element_by_id("textarea_Initial Comment")
search.send_keys("Test comentario inicial")

search = driver.find_element_by_id("textarea_Corrective Action Taken")
search.send_keys("Test comentario actions")

search = driver.find_element_by_id("text_box_L&F email address")
search.send_keys("lf@test.com")

search = driver.find_element_by_id("text_box_Management email address")
search.send_keys("man@test.com")



#button = driver.find_element_by_id("form_submit_btn")
#button.click()