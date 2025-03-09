FROM mcr.microsoft.com/vscode/devcontainers/base:ubuntu

# Install Python 3.8
RUN apt-get update && \
    apt-get install -y python3.8 python3.8-venv python3.8-dev python3-pip && \
    update-alternatives --install /usr/bin/python3 python3 /usr/bin/python3.8 1 && \
    update-alternatives --set python3 /usr/bin/python3.8

# Confirm the default python version
RUN python3 --version
