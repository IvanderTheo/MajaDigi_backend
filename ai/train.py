import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.metrics import (
    accuracy_score,
    classification_report,
    confusion_matrix
)
import joblib

# load dataset
df = pd.read_csv("datasets/tb_screening_dataset_100_rows.csv")

# convert label
df['screening_result'] = df['screening_result'].map({
    'negative': 0,
    'positive': 1
})

# features
X = df[
    [
        'cough_duration',
        'fever',
        'weight_loss',
        'night_sweat'
    ]
]

# target
y = df['screening_result']

# split dataset
X_train, X_test, y_train, y_test = train_test_split(
    X,
    y,
    test_size=0.2,
    random_state=42
)

# create model
model = LogisticRegression()

# train
model.fit(X_train, y_train)

# prediction
y_pred = model.predict(X_test)

# evaluation
accuracy = accuracy_score(y_test, y_pred)

print("\nAccuracy:")
print(accuracy)

print("\nClassification Report:")
print(classification_report(y_test, y_pred))

print("\nConfusion Matrix:")
print(confusion_matrix(y_test, y_pred))

# save model
joblib.dump(model, "tb_model.pkl")

print("\nModel saved as tb_model.pkl")