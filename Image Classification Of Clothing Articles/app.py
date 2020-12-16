from flask import Flask, render_template, request, send_from_directory
import cv2 as cv
import tensorflow as tf
import keras
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Dropout, Conv2D, MaxPooling2D, BatchNormalization, Flatten
import numpy as np


model=tf.keras.models.load_model("static/fashion_cnn_final_aug.h5")


COUNT = 0
app = Flask(__name__)
app.config["SEND_FILE_MAX_AGE_DEFAULT"] = 1

@app.route('/')
def man():
    return render_template('index.html')


@app.route('/home', methods=['POST'])
def home():
    global COUNT
    img = request.files['image']

    img.save('static/{}.jpg'.format(COUNT))    
    img_arr = cv.imread('static/{}.jpg'.format(COUNT), cv.IMREAD_GRAYSCALE)

    img_arr = cv.resize(img_arr, (28,28))
    # img_arr = img_arr / 255.0
    img_arr = np.array(img_arr).reshape(-1, 28,28,1)
    

    prediction = model.predict(img_arr)

    a1 = round(prediction[0,0], 2)
    a2 = round(prediction[0,1], 2)
    a3 = round(prediction[0,2], 2)
    a4 = round(prediction[0,3], 2)
    a5 = round(prediction[0,4], 2)
    a6 = round(prediction[0,5], 2)
    a7 = round(prediction[0,6], 2)
    a8 = round(prediction[0,7], 2)
    a9 = round(prediction[0,8], 2)
    a10 = round(prediction[0,9], 2)

    # pred=[]
    # for i in prediction:
    #     pred.append(round(i,10))
    preds = np.array([a1,a2,a3,a4,a5,a6,a7,a8,a9,a10])
    COUNT += 1
    return render_template('prediction.php', data=preds)


@app.route('/load_img')
def load_img():
    global COUNT
    return send_from_directory('static', "{}.jpg".format(COUNT-1))


if __name__ == '__main__':
    app.run(debug=True)



