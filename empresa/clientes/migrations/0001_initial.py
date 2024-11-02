# Generated by Django 5.1.2 on 2024-11-02 01:04

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = []

    operations = [
        migrations.CreateModel(
            name="Cliente",
            fields=[
                (
                    "id",
                    models.BigAutoField(
                        auto_created=True,
                        primary_key=True,
                        serialize=False,
                        verbose_name="ID",
                    ),
                ),
                ("nombre", models.CharField(max_length=100)),
                ("numruc", models.CharField(max_length=11)),
                ("direccion", models.CharField(max_length=100)),
                ("telefono", models.CharField(max_length=20)),
            ],
            options={
                "db_table": "cliente",
            },
        ),
    ]
